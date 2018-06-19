class User {
    
constructor(username,email, password){
this.username = username;
this.email = email;
this.password = password;
    
}    

static countUser(){
    console.log("there are 50 users");
}    
    
register(){
    console.log(this.username + 'is noww registered');
}    
    
}