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
    text: 'Welcome to the Reggie tour! <br> Let\'s show you around.',
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
            // classes: 'text-white bg-primary-pink-500 rounded-md py-2 px-4',
            text: 'Proceed'
        },
    ],
    classes: 'bg-primary-pink-500',
    modalOverlayOpeningPadding: '30px',

});

tour.addStep({
    title: 'Payment',
    text: 'Configure, browse and manage payments from customers.',
    attachTo: {
        element: '#payments',
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
            classes: 'bg-primary shadow-md rounded-sm text-white hover:!bg-primary !px-2 !py-1',
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
            classes: 'bg-primary shadow-md rounded-sm text-white hover:!bg-primary !px-2 !py-1',
            text: 'Proceed'
        }
    ],
    modalOverlayOpeningPadding: '30px',
});

tour.addStep({
    title: 'admin',
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
            classes: 'bg-primary shadow-md rounded-sm text-white hover:!bg-primary !px-2 !py-1',
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