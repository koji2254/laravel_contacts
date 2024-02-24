
// const logoutButton = document.getElementById('logout-button')

/**
 * @description Checks if a user is already auth
 */

const authVerify = async () => {
  const authTokenVrify = localStorage.getItem('cc_auth_id')

  if(authTokenVrify){
    // console.log(authTokenVrify)
    // window.location.href = '/home'
  }

}

// Call function to verify
authVerify()

 