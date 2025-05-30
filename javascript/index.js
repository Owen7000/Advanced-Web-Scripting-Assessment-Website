const navTopicInformationButton = document.getElementById('btnTopicInformation');
const navLogoutButton = document.getElementById('btnLogout');
const navFaqButton = document.getElementById('btnFaq');
const baseUrl = "https://fifecomptech.net/~s1761799/SpaceRelatedBusiness/";

navTopicInformationButton.addEventListener('click',  function() {
    // The topic information nav button has been pressed
    location.href = `${baseUrl}topic.php`;
})

navLogoutButton.addEventListener('click', function() {
    // The logout button has been pressed
    location.href = `${baseUrl}logout.php`;
})

navFaqButton.addEventListener('click', function() {
    // The FAQ button has been pressed
    location.href = `${baseUrl}faq.php`;
})