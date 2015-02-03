<?php namespace Sulsira\Menu;
/**
 * Created by PhpStorm.
 * User: mamadou
 * Date: 1/25/2015
 * Time: 2:56 AM
 */

namespace Sulsira\Menu;
use Session, Auth, Config;

class Menu {
    private $user_domain;
    private $user_logged;
    private $user_security_level;
    private $user_group;
    private $user_access;
    private $user_domain_menu;
    private $domain_menu;
    private $clean_menu;
    private $allowed_by_SL_pages;
    private $allowed_by_SL_systems;
    private $allowed_by_SL_others;
    private $temp_array;
    protected  static $instance;

    //we want to pull all the pages and the different domains
    private function getUserDomain($domain){

        // we make the persons details globally accessable
        $this->user_domain = $domain;

    }

    private function checkUserLoggedIn(){
        $status = Config::get('menu::login_status');
        //    we want to know if the person is logged in
        if( Auth::check() ){
           $status = true;
        }
        return $status;
    }
    private function sessionInit(){
        $user = $this->checkUserLoggedIn();
        if( $user ) {

            $this->getUserDomain(Session::get(Config::get('menu::domain')));
            $this->getUserSecurityLevel(Session::get(Config::get('menu::securityLevel')));
            $this->getUserGroup(Session::get(Config::get('menu::userGroup')));

        }
        return $user;
    }
    private function getUserSecurityLevel($securityLevel){

        // we make the persons details globally accessable
        //  here check for the existance of the security level
        //        make sure the security level is not a negative or zero
        //        call the confirmUserAccess if the security level does not exist
        $this->user_security_level = $securityLevel;
    }
    private function getUserGroup($usergroup){

        #we should check in the database to confirm the usergroup if it exist then we process if not we terminate

        if( $this->user_security_level ){

            // we make the persons details globally accessable
            $this->user_group = $usergroup;

        }else{

            //    but if the person have only a security level we pull only his dashboard

            // if the person has only domain no security level we put only the pages of security level 8 for him

            $this->getUserSecurityLevel( Config::get( 'menu::lowestsecuritylevel' ) );
        }


    }
    private function confirmUserAccess(){

       $user = $this->sessionInit();

        if( $user ){

            // if logged in we want to take the persons security level and take the persons domain
                if( $this->user_domain && $this->user_security_level ){

                    $this->domainBasedMenu();

                }else{
                    // if the person have no security level and have no domain, then we check for usergroup
                    if( $this->user_group ){
                        $this->getUserGroup( $this->user_group );
                    }
                }


        }else{
            // if the person have none of them then we logout the user and delete his account
            $this->terminate();
        }

        return $user;

    }


    private function accessKeyConsider(){

// then check if the person have an access key
        // if yes we pull the access key class to access key stuff
    }


    private function domainBasedMenu(){

    // we pull in the menu depending on his domain and make it globally accessable array
        $this->user_domain_menu = array_get(Config::get('menu::nav.main'),$this->user_domain);
    }

    private  function separator($dataset = null){ #acts like a DTO
        $pages = array();
        $systems = array();
        $others = array();

        $data = ($dataset)?: $this->user_domain_menu;

//          security shoudl be compare and we take only his security level and less
        foreach($data as $key => $value ){
            if($key == 'pages'){
                $pages = $value;
            }elseif($key == 'systems'){
                $systems = $value;
            }else{
                $others = $value;
            }
        }
        return compact('pages','systems','others');
    }

    private function securityFilter($data = null, $level = null ){
        $allowed_pages = array();
        $allowed_systems = array();

        if( !empty($data) ){

            foreach($data as $ind => $page){

                if( Config::get('menu::lowestsecuritylevel') > Config::get('menu::highestsecuritylevel') ){

                    if( $page['security']['level'] >= $this->user_security_level  ){

                        $allowed_pages[] =  $page;
                    }

                }else{
                    if( array_get($page, '') <= $this->user_security_level  ){

                        $allowed_pages[] =  $page;
                    }
                }
            }

        }
    }
    private function securityLevelFilter(){
        $allowed_pages = array();
        $allowed_systems = array();
        // now we filter by security level: that is we create two arrays one for all the pages he can assess and the other controller restrictions

        $pages = $this->separator();
        extract($pages);

        foreach($pages as $ind => $page){

            if( Config::get('menu::lowestsecuritylevel') > Config::get('menu::highestsecuritylevel') ){

               if( $page['security']['level'] >= $this->user_security_level  ){
                   $allowed_pages[] =  $page;
               }

            }else{
                if( $page['security']['level'] <= $this->user_security_level  ){

                    $allowed_pages[] =  $page;

                }
            }
        }

        $this->allowed_by_SL_pages = $allowed_pages;
        $this->allowed_by_SL_systems = $allowed_systems;
    }

    private function dropDownSLfilter( $dataset ){
        $data = array();
        $dropDowns = array();
        $singles = [];
        $drops = [];
        // drop down security level filter
        if( !empty($dataset) ){

            foreach( $dataset  as $key => $value ){
                $layer = [];
              if( $value['type'] == 'dropdown' ){

                  $layer = $value ;
                      $menu = [];
                  foreach($value as $ind => $val){

                      if( $ind == Config::get('menu::dropdown_menu') ){

                          if(is_array($val)){

                             foreach( $val as $v ){

                                 if( Config::get('menu::lowestsecuritylevel') > Config::get('menu::highestsecuritylevel') ){

                                     if( $v['security'] >= $this->user_security_level  ){

                                         $menu[] =  $v;

                                     }

                                 }else{

                                     if( $v['security'] <= $this->user_security_level  ){

                                         $menu[] =  $v;
                                     }
                                 }
                             }
                          }

                      }
                $layer['menu'] = $menu;

                  }

              }else{
                  $singles[] =  $value ;
              }
              $dropDowns[] = $layer;
            }
        }


        if (!empty($dropDowns)) {
           foreach ($dropDowns as $dp => $down) {
              if(!empty($down)){
                $drops[] = $down; 
              }
           }
        }
        $data = [
        'pages' => $singles,
        'dropdowns' => $drops
        ];

        return $data;

    }

    private function dropDownDfilter(){
//        drop down domain filter
    }

    private function pagesProcessor(){

        // generate a new array cleaned pages he can access

        // now we filter by security level: that is we create two arrays one for all the pages he can assess and the other controller restrictions
        $this->securityLevelFilter();
    }

    private function specialCasesFilter(){
        $cases = '' ;
//        $cases = array();
        if(isset($this->user_domain_menu['systems'])){

            $cases = 'systems';

        }
        //    check to see if the domain user pull array have an more arrays or objects
                // the special cases

        //    we check to see if the user domain menu have system

        //    if yes we we call the system method

        //    goes to the menu config and all from teh array the systems the user can access
        return $cases;
    }
    private function allowedSystems($data){

    }
    private function systemMenu($data = null){
        $data = (!empty($data))?: $this->user_domain_menu['systems'];
        $nav = Config::get('menu::nav.main');
//        var_dump( $nav );
        $systems = array_except($nav, $this->user_domain);
        $system_domains = array_divide($systems)[0];
        var_dump(  array_divide(array_divide($data)[1] ) );
//        $test = array_get(), $data['']);
        // goes back to the config menu

        // goes throw the system name indexes
        // calls the names form the main menu and create drop downs
    }

    private function patchArray(){
//        first we collect the allowed pages
        $pages = $this->dropDownSLfilter($this->allowed_by_SL_pages);

//        dd($pages);

        $special = $this->specialCasesFilter();

        if( $special ){

            $this->systemMenu();

        }
//            send the system page to be SL filtered
//        then we join the pages and system pages in one big array
    }
    private function dropDownCreator(){
    // then add them to the clean array as drop downs

    // the we call the dropdown creator
    }
    protected  function processor(){
        $access = $this->confirmUserAccess();

        // confirm the user ability to access the menus, then
        if( $access ){
            $this->pagesProcessor();
            $this->patchArray();
        }else{
            //        terminate if user have no acess
            $this->terminate();
        }


//        filter the menu

//        filter and add especial cases

//        if not then return an array of all pages and systems the user can assess.


    }

    protected function shoot($args){

        Session::put('domain', 'admin');
        Session::put('securitylevel', '2');
        Session::put('usergroup', 'manager');

        $this->processor();

        $all = Session::all();


        // menu ui

        //    from the cleaned array we loop through pages and check if they are single or dropdown

        //    we call the single page method to create bootstrap list

        // we call dropdop dowm method as well
    }

    protected function terminate(){
//        kill the whole process and return false
    }


    public static function topbar( $args = null ){

        $args = empty($args) ? [] : $args[0];

        $instance = static::$instance;
        if ( ! $instance) $instance = static::$instance = new static;

        return $instance->shoot( $args);

    }



} 