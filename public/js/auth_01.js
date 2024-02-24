

const auth = new AuthUsers

const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content
const regBtn = document.getElementById('register-button')
const userName = document.getElementById('name')
const email = document.getElementById('email')
const password = document.getElementById('password')
const confirm_password = document.getElementById('confirm_password')

console.log(csrfToken)

const registerNewUser = () => {
  let userInfo = {
    name: userName.value.trim(),
    email: email.value.trim(),
    password: password.value.trim(),
    password_confirmation: confirm_password.value.trim()
  }

  if((userInfo.userName === '') || (userInfo.email === '') || (userInfo.password === '') || (userInfo.confirm_password === '')){

    return console.error('Error: Missing Credentials')
  }

  register('api/register-user', userInfo)

}
 const register = async (url, data) => {
    try {
      const response = await fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type' : 'application/json',
          'X-CSRF-TOKEN' : csrfToken
        },
        body: JSON.stringify(data)
      })
      if(!response.ok) {
        //  If the server return an error status, throw an error
        throw new Error(`HTTP error! Status: ${response.status}`)
      }
      const resData = await response.json();

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

          return email.forEach(list => {
            console.log(email)
          });
        
      }
      
      
    } catch (error ){

      return console.log('Error occured ' . error);
    }
  }
 


regBtn.addEventListener('click', (e) => {
  e.preventDefault()
  registerNewUser()
})  