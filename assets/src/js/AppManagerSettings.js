import $ from 'jquery';

class AppManagerSettings {
  constructor() {
    console.log('Admin JS started...');
    this.init();
    // COLLECTING ELEMENTS
    // this.button = $('#adminmenuwrap');
    this.button = $('#selflist-search-user');

    this.setEvents();
  }

  init = () => {
    console.log('ES6 From WPAdmin ...');
    alert(this.button);
  };

  setEvents = () => {
    this.button.on('click', this.clickHandler);
  };

  clickHandler = () => {
    alert('Button Clicked');
  };
}

new AppManagerSettings();
