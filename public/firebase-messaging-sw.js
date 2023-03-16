// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.importScripts('https://www.gstatic.com/firebasejs/7.23.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
/*
Initialize the Firebase app in the service worker by passing in the messagingSenderId.
*/
firebase.initializeApp({
    apiKey: "AIzaSyCWdCE2ctNshZA2E9OihpG3_AVxRw4cuRo",
    authDomain: "notificationlaravel-51efd.firebaseapp.com",
    projectId: "notificationlaravel-51efd",
    storageBucket: "notificationlaravel-51efd.appspot.com",
    messagingSenderId: "13271605824",
    appId: "1:13271605824:web:ff938b81a3de930cd035a5",
    measurementId: "G-GG1DGX9Z8P"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
    console.log("Message received.", payload);
    const title = "Hello world is awesome";
    const options = {
        body: "Your notificaiton message .",
        icon: "/firebase-logo.png",
    };
    return self.registration.showNotification(
        title,
        options,
    );
});