import * as moment from "moment";
moment.locale("fr");

function formatDate(date) {
  return moment(date).format("DD/MM/YYYY");
}

function formatHour(hour) {
  return moment(hour).format("HH[h]mm");
}

export default {
  formatDate,
  formatHour
};
