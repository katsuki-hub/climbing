var events = [
  { 'Date': new Date(2021, 5, 29), "Title": "mono 19:00 ~" },
  { 'Date': new Date(2021, 6, 4), "Title": "mono 10：00 ~"},
  { 'Date': new Date(2021, 6, 6), "Title": "ホアホア 19：00 ~"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);