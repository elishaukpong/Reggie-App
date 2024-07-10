import Shepherd from 'shepherd.js';
import 'shepherd.js/dist/css/shepherd.css';

let tour = new Shepherd.Tour({
    useModalOverlay: true,
    defaultStepOptions: {
        cancelIcon: {
            enabled: true
        },
        classes: 'bg-white rounded-md',
        scrollTo: { behavior: 'smooth', block: 'center' }
    }
});

tour.addStep({
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
            classes: '',
            text: 'Next'
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
            text: 'Next'
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
            text: 'Next'
        }
    ],
    modalOverlayOpeningPadding: '30px',
    // id: 'creating'
});

tour.addStep({
    title: 'admin',
    text: 'Finally, manage your Paystack account settings and activity from here',
    attachTo: {
        element: '#general-settings',
        on: 'right'
    },
    classes: '',
    buttons: [
        {
            action() {
                return this.cancel();
            },
            classes: 'bg-primary shadow-md rounded-sm text-white hover:!bg-primary !px-2 !py-1',
            text: 'End Tour'
        },
        {
            action() {
                return this.back();
            },
            classes: 'shepherd-button-secondary',
            text: 'Back'
        },
    ],
    modalOverlayOpeningPadding: '30px',
    // id: 'creating'
});

document.querySelector("#start-tour")
    .addEventListener('click', e => {
        e.preventDefault();
        tour.start();
    })