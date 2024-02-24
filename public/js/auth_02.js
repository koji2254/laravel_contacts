const auth = new AuthUsers

const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content
const regBtn = document.getElementById('login-button')
const email = document.getElementById('email')
const password = document.getElementById('password')

const authUser = () => {
  let userInfo = {
    email: email.value.trim(),
    password: password.value.trim(),
  }

  if((userInfo.email === '') || (userInfo.password === '')){

    return console.error('Error: Missing Credentials')
  }

  login('api/auth-user', userInfo)

}
 const login = async (url, data) => {
    try {
      const response = await fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type' : 'application/json',
          'X-CSRF-TOKEN' : csrfToken,
        },
        body: JSON.stringify(data)
      })

      const resData = await response.json()

      if(!response.ok) {
        //  If the server return an error status, throw an error
        throw new Error(`HTTP error! Status: ${response.status}`)
      }
       /** 
         * These section triggers off if there is an error in the code
        */
        if(resData.status === 'true'){  

            const authToken = resData.token

            localStorage.setItem('cc_auth_id', authToken)

            return window.location.href = '/home';
        
        }else {
            console.log(resData.message)
            
            const msg = resData.message

            const { email, password } = msg

            return alert('Invalid Credentials')
        }
    } catch (error ){

      return console.log('Error occured ' . error);
    }
  }
 


regBtn.addEventListener('click', (e) => {
  e.preventDefault()
  authUser()
})  