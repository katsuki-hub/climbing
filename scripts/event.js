var events = [
  { 'Date': new Date(2021, 5, 29), "Title": "mono 19:00" },
  { 'Date': new Date(2021, 6, 4), "Title": "mono 10：00"},
  { 'Date': new Date(2021, 6, 6), "Title": "ホアホア 19：00"},
  { 'Date': new Date(2021, 6, 10), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 13), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 17), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 20), "Title": "mono 19：00"},
  { 'Date': new Date(2021, 6, 25), "Title": "mono 10：00"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);