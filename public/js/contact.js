const contact = new Contacts;
const csrfToken = document.head.querySelector('meta[name="csrf-token"]').content


const contactsContainer = document.getElementById('contacts-div')
const createContactBtn = document.getElementById('create-contact-btn')

const contactInfoOverlay = document.getElementById('info-contact-overlay')
const closeInfoOverlay = document.getElementById('close-info-contact')


const logoutButton = document.getElementById('logout-button')


/**
 * All Contact information to create a new contact
 */
const infoEmail = document.getElementById('info-email')
const infoName = document.getElementById('info-name')
const infoAddress = document.getElementById('info-address')
const infoNumber = document.getElementById('info-number')
const closeFormIcon = document.getElementById('close-contact-form')
const showFormIcon = document.getElementById('show-form')
const contactFormOverlay = document.getElementById('contact-form-overlay')
/**
 * //
 */


/**
 * Get the all users Contact List
 */
contact.get('api/get-contacts')
  .then(res => fillContactsList(res))
  .catch(error => console.log(error))

/**
 *  Pupulate the Contacts List 
 */  
function fillContactsList(contacts){
  let output = ''
  console.log(contacts)
  contacts.contacts.forEach(item => {
     output = `<div class="contact-card p-1 bg-gray-50 mt-1 border-t-2 flex items-center gap-2">
     <span class="bg-white rounded-full p-2">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
     </span>
    <div class="flex items-center justify-between w-full">
      <div class="border-l-2 px-1">
        <small class="text-gray-700 font-semibold">${item.name}</small>
        <p class="font-semibold text-gray-800">${item.phone}</p>
      </div>
      <span contact_id='${item.contact_id}' id='expand-contact' class="hover:text-gray-600 p-1 expand-contact">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
        </svg>                  
      </span>
    </div> 
  </div>
  `; 

  contactsContainer.innerHTML += output;
  });
}


/**
 * Send new info contact
 */
const createNewContact = () => {
  if(infoName.value === '' || infoNumber.value === ''){
    return console.log('Fill in name and number to save a number')
  }

  const infoData = {
    name: infoName.value,
    email: infoEmail.value,
    address: infoAddress.value,
    phone: infoNumber.value,
  }

  console.log(infoData)
}


/**
 * 
 * @access Logout function  
 */
const logout = async () => {
  const token = localStorage.getItem('cc_auth_id');
  const url = 'api/logout';

  try {
    const response = await fetch(url, {
      method: 'DELETE',
      headers: {
        'Authorization': `Bearer ${token}`,
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN' : csrfToken
      },
    });

    if (response.ok) {
      localStorage.removeItem('cc_auth_id');
      window.location.href = '/login';
    } else {
      const errorData = await response.json();
      console.error('Error:', errorData.message);
      alert('Something went wrong');
    }
  } catch (error) {
    console.error('Error occurred:', error);
  }
};




/**
 * All Sections for Event Listeners
 */

createContactBtn.addEventListener('click', (e) => {
  e.preventDefault()

  createNewContact()
})


closeFormIcon.addEventListener('click', (e) => {
  console.log('Close the Button')

  contactFormOverlay.style.display = 'none'

})

showFormIcon.addEventListener('click', (e) => {
  
  contactFormOverlay.style.display = 'flex'
})



contactsContainer.addEventListener('click', (e) => {
  // console.log(e.target)
  if(e.target.parentElement.classList.contains('expand-contact')){
    // console.log('expand-contact')

    contactInfoOverlay.style.display = 'flex'
  }


})


closeInfoOverlay.addEventListener('click', (e) => {

  contactInfoOverlay.style.display = 'none'
})

logoutButton.addEventListener('click', (e) => {
  e.preventDefault()

  logout()

})

