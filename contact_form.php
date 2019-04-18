<?php
ini_set("allow_url_fopen", 1);



if(isset($_POST["job_name"])){
    
    //combining fullname, email and message
    $wholeMessage = "->Какая работа: ".$_POST["job_name"]."->Имя: ".$_POST["form_name"]." ->Почта: ".$_POST["form_email"]." ->Возраст клиента: ".$_POST["form_age"]." ->Пол клиента ".$_POST["form_sex"]." ->Сообщение".$_POST["form_message"];
    
    $data = "https://api.telegram.org/bot810636852:AAHbm2Wd3VdbcXkrWPk_6QKkgNbvayH_SL0/sendmessage?chat_id=-347454326&text=".$wholeMessage;
    $response = file_get_contents($data);
    

    
    echo "Отправлено";
}
else{
    echo "Не отправлено пожалуйста проверьте!";
}
?>