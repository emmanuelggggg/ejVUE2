<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <div id="contenedor">
        
        <form action="">
        <fieldset>
            <legend>datos  de acceso</legend>

            <input type="email" required placeholder="email">
            <input type="password" required placeholder="password"> <br>
            <button @click="login"> acceder</button>
        </fieldset>

        </form>

    </div>

    <script src="https://unpkg.com/vue@3"></script>

    <script>
    const { createApp } = Vue
   

    const app =  createApp({
            data() {
                return {
                    user: null,
                    email:"",
                    password:""
                }
            },
            methods: {
                login() {
                    var tpm_email = this.mail
                    var tpm_pwd= this.password

                    var access = this.users.map(function(u){
                        console.log(u)
                        console.log(tpm_email)
                        if(tpm_email == u.email){
                            if(tpm_password == u.password){
                                var tmp_user={
                                    name: u.name,
                                    username: u.username,
                                    email: u.email
                                }
                                localStorage.setItem("user",tmp_user);
                                console.log("accesos correctos")
                            }
                        }
                    })
                    console.log("datos incorrectos")
                    e.preventDefault()
                }
            },
            mounted() {
                fetch('users.json')
                .then((res) => res.json())
                .then((json) =>(this.user = json))
                .catch((err) =>(alert("no data")))

            }  
        }).mount('#contenedor')
    </script>

</body>
</html>