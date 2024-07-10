import Shepherd from 'shepherd.js';

let tour = new Shepherd.Tour({
    useModalOverlay: true,
    defaultStepOptions: {
        cancelIcon: {
            enabled: false
        },
        classes: 'bg-white rounded-md',
        scrollTo: { behavior: 'smooth', block: 'center' }
    }
});

tour.addStep({
    id: 'intro',
    title: 'Welcome',
    text: 'Welcome to the Reggie! Let\'s show you around.',
    buttons: [
        {
            text: 'Next',
            action: tour.next
        }
    ],
    modalOverlayOpeningPadding: '30px'
});

tour.addStep({
    id:'home',
    title: 'Home',
    text: 'View metrics and chart to know how your business is performing',
    attachTo: {
        element: '.dashboard #home',
        on: 'right'
    },
    buttons: [
        {
            action() {
                return this.next();
            },
            text: 'Proceed'
        },
    ],
    modalOverlayOpeningPadding: '30px',

});

tour.addStep({
    title: 'Payment',
    text: 'Configure, browse and manage payments from customers.',
    attachTo: {
        element: '#payments',
        on: 'right'
    },
    buttons: [
        {
            action() {
                return this.back();
            },
            classes: 'shepherd-button-secondary',
            text: 'Back'
        },
        {
            action() {
                return this.next();
            },
            text: 'Proceed'
        }
    ],
    modalOverlayOpeningPadding: '30px',
});

tour.addStep({
    title: 'Business tools',
    text: 'Make use of these simple, powerful tools to start selling quickly',
    attachTo: {
        element: '#business-tools',
        on: 'right'
    },
    classes: '',
    buttons: [
        {
            action() {
                return this.back();
            },
            classes: 'shepherd-button-secondary',
            text: 'Back'
        },
        {
            action() {
                return this.next();
            },
            text: 'Proceed'
        }
    ],
    modalOverlayOpeningPadding: '30px',
});

tour.addStep({
    title: 'Admin',
    text: 'Finally, manage your Paystack account settings and activity from here',
    attachTo: {
        element:'.business-tools #general-settings',
        on: 'right'
    },
    classes: '',
    buttons: [
        {
            action() {
                return this.back();
            },
            classes: 'shepherd-button-secondary',
            text: 'Back'
        },
        {
            action() {
                return this.cancel();
            },
            text: 'End Tour'
        },
    ],
    modalOverlayOpeningPadding: '30px',
});

document.querySelector("#start-tour")
    .addEventListener('click', e => {
        e.preventDefault();
        tour.start();
    })