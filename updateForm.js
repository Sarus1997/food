function updateForm(id, dateBooking, roomType, eventName, startTime, endTime) {
    // set form update
    let form = document.getElementById("form");
    form.innerHTML = 

    document.getElementById("inputDate").setAttribute("value", dateBooking);
    document.getElementById("inputStartTimeHour").value = startTime.split(":")[0];
    document.getElementById("inputStartTimeMinute").value = startTime.split(
      ":"
    )[1];
    document.getElementById("inputEndTimeHour").value = endTime.split(":")[0];
    document.getElementById("inputEndTimeMinute").value = endTime.split(":")[1];
    document.querySelector(`input[value="${roomType}"]`).checked = true;
    document.getElementById("textAreaEvent").value = eventName;

    document.getElementById("myFormUpdate").addEventListener("submit", (e) => {
      e.preventDefault();

      let dateBooking = document.getElementById("inputDate").value;
      let startHour = document.getElementById("inputStartTimeHour").value;
      let startMinute = document.getElementById("inputStartTimeMinute").value;
      let endHour = document.getElementById("inputEndTimeHour").value;
      let endMinute = document.getElementById("inputEndTimeMinute").value;
      let roomType = document.querySelector('input[name="roomType"]:checked')
        .value;
      let eventName = document.getElementById("textAreaEvent").value;
      // set time format
      let startTime = `${startHour}:${startMinute}`;
      let endTime = `${endHour}:${endMinute}`;

      updateEvent(id, dateBooking, roomType, eventName, startTime, endTime);
  
      readEvent();
      reset();
    });

    document.getElementById("btnReset").addEventListener("click", (e) => {
      reset();
    });
  }