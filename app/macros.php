<?php 
/*
|--------------------------------------------------------------------------
| Delete form macro
|--------------------------------------------------------------------------
|
| This macro creates a form with only a submit button. 
| We'll use it to generate forms that will post to a certain url with the DELETE method,
| following REST principles.
|
*/
Form::macro('delete',function($url, $button_label='Delete',$form_parameters = array(),$button_options=array()){

    if(empty($form_parameters)){
        $form_parameters = array(
            'method'=>'DELETE',
            'class' =>'killing',
            'url'   =>$url
            );
    }else{
        $form_parameters['url'] = $url;
        $form_parameters['method'] = 'DELETE';
    };

    return Form::open($form_parameters)
            . Form::submit($button_label, $button_options)
            . Form::close();
});
Form::macro('date',function($name, $attr = array()){
    $input ='<input type="date" ';
    $attrs = '';
    foreach ($attr as $key => $value) {
       $attrs .= $key.' = "'.$value.' "';
    }
     // return '<input type="datetime" name= $attrs/>';
     // needs more controlling for errors
    $input .= ' name='.$name.' '.$attrs;
    $input .= '/>';
    return $input;
});
Form::macro('number',function($name,$value, $attr = array()){
    $input ='<input type="number" ';
    $attrs = '';
    foreach ($attr as $key => $value) {
       $attrs .= $key.' = "'.$value.'"';
    }
     // return '<input type="datetime" name= $attrs/>';
     // needs more controlling for errors
    $input .= ' name='.$name.' '.$attrs;
    $input .= '/>';
    return $input;
});