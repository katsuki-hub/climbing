var events = [
  { 'Date': new Date(2021, 5, 29), "Title": "mono 19:00 ~" },
  { 'Date': new Date(2021, 5, 28), "Title": "6月4週~道場課題の写真更新~"},
  { 'Date': new Date(2021, 6, 6), "Title": "ザウォール 10：00 ~"},
];

var settings = {};
var element = document.getElementById('calendar');
calendar(element, events, settings);