// 

class AuthUsers {

  // Register new User 
  async register(url, data) {
    try {
      const response = await fetch(url, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Content-Type' : 'application/json'
        },
        body: JSON.stringify(data)
      })
      if(!response.ok) {
        //  If the server return an error status, throw an error
        throw new Error(`HTTP error! Status: ${response.status}`)
      }
      const resData = await response.json();

      return resData;

    } catch (error ){

      return 'Error occured ' . error;
    }
  }
 
}


class Contacts {

  async get(url){
    try {
      const response = await fetch(url, {
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
        }
      })

      if(!response.ok) {
        // throw Error
        return 'Error! not OK: ' . response.status
      }
      const data = await response.json()

      return data
      
    } catch (error) {

      return `Error! Server ${error}`;
    }
  }

}

class DomHandling {




}