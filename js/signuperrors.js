function check(){
    let password = document.getElementById('pwd');
    let repassword = document.getElementById('repwd');

    if(password != repassword){
        document.getElementById('pwd') = " ";
        document.getElementById('repwd')= " ";
    }
}