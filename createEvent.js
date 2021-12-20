function createEvent(dateBooking, roomType, eventName, startTime, endTime) {
    counter += 1;
    let event = {
      id: counter,
      date: dateBooking,
      room: roomType,
      event: eventName,
      startTime: startTime,
      endTime: endTime,
    };
    let db = firebase.database().ref("Your Reference RTDB" + counter);
    db.set(event);
  }
  
  function readEvent() {
    agendaTableRows.innerHTML = "";
    let events = firebase.database().ref("Your Reference RTDB");
    events.on("child_added", function (data) {
      let eventValue = data.val();
  
      let dateEvent = new Date(eventValue.date)
        .toLocaleDateString("en-US", {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
        })
        .split(", ");
      let dayOfMonth = dateEvent[1].split(" ")[1];
      let dayOfWeek = dateEvent[0];
      let shortDate = dateEvent[1].split(" ")[0] + ", " + dateEvent[2];
  
      agendaTableRows.innerHTML += `
          <tr>
              <td class="agenda-date">
                  <div class="dayofmonth">${dayOfMonth}</div>
                  <div class="dayofweek">${dayOfWeek}</div>
                  <div class="shortdate text-muted">${shortDate}</div>
              </td>
              <td class="agenda-time">${eventValue.startTime} - ${eventValue.endTime}</td>
              <td class="agenda-room">${eventValue.room}</td>
              <td>${eventValue.event}</td>
              <td class="agenda-button">
                  <button type="button" class="btn btn-warning btn-sm" onclick="updateForm(${eventValue.id}, '${eventValue.date}', '${eventValue.room}', '${eventValue.event}', '${eventValue.startTime}', '${eventValue.endTime}')">
                      <i class="far fa-edit"></i>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm"
                  onclick="deleteEvent(${eventValue.id})">
                      <i class="fas fa-trash"></i>
                  </button>
              </td>
          </tr>
          `;
    });
  }