function getNextDepartures( dayOfWeek,departuresWeek,departuresWeekend,numberToShow){  
    const currentTime = new Date();
    let departures = [];
  if (dayOfWeek === 0 || dayOfWeek === 6) {
    departures = departuresWeekend;
  } else {
    departures = departuresWeek;
  }
  const today = new Date();
  const isoDate = today.toISOString().substring(0, 10);
  if (holidays.includes(isoDate)) {
    departures = departuresWeekend;
  }

  // Filter out departures that have already passed
  const filteredDepartures = departures.filter((departure) => {
    const [hours, minutes] = departure.split(":");
    const departureTime = new Date();
    departureTime.setHours(hours, minutes, 0, 0);
    return departureTime > currentTime;
  });

  // Select the next three departures
  const nextDepartures = filteredDepartures.slice(0, numberToShow);

  return nextDepartures;
}

function getNextDeparturesRW( dayOfWeek,departuresWeek,departuresWeekend,numberToShow){  
  const currentTime = new Date();
  let departures = [];


  const currentDate = new Date();
  const currentMonthLocal = currentDate.getMonth();
  
  
  if (currentMonthLocal === 3 || currentMonthLocal === 4 || currentMonthLocal === 5 || currentMonthLocal === 8) {
    if (dayOfWeek === 0 || dayOfWeek === 6) {
      departures = departuresWeekend;
    } else {
      departures = [];
      document.getElementById("statusRW").innerHTML = "Geen Veer Vandaag";
    }
  }else if( currentMonthLocal == 6 || currentMonthLocal == 7){
    if (dayOfWeek === 0 || dayOfWeek === 6) {
      departures = departuresWeekend;
    } else {
      departures = departuresWeek;
    }
  }else{
    departures = [];
    document.getElementById("statusRW").innerHTML = "Geen Veer Vandaag";


    
  }


const today = new Date();
const isoDate = today.toISOString().substring(0, 10);
if (holidays.includes(isoDate)) {
  departures = departuresWeekend;
}

// Filter out departures that have already passed
const filteredDepartures = departures.filter((departure) => {
  const [hours, minutes] = departure.split(":");
  const departureTime = new Date();
  departureTime.setHours(hours, minutes, 0, 0);
  return departureTime > currentTime;
});

// Select the next three departures
const nextDepartures = filteredDepartures.slice(0, numberToShow);

return nextDepartures;
}


