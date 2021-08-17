const contactUs = (event) => {
    const firstName = document.querySelector('#firstname');
    const lastName = document.querySelector('#lastname');
    const userEmail = document.querySelector('#contactEmail');
    const userSubject = document.querySelector('#contactSubject');
    const userMessage = document.querySelector('#contactMessage');
    swal({
        text: `FirstName- ${firstName.value } \nLastName-${lastName.value} \nEmail- ${userEmail.value} \nSubject- ${userSubject.value} \nMessage- ${userMessage.value}`,
        icon: 'success'
    });
    [firstName.value, lastName.value, userEmail.value, userSubject.value, userMessage.value] = ['', '', '', '', ''];
}