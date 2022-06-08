<?php
function check($data){
    $error_msg = array();
    if(preg_match('/[!#<>:;&~@%+$<>「」{}"\'\*\^\(\)\[\]\|\/\.,_-]/' ,$data)){
        echo $error_msg[] = "入力欄には\"ひらがな\"、\"カタカナ\"、\"英字\"のみをご入力ください。";
    }
}
check("<script>Hello World</script>22");

?>