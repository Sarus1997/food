function updateEvent(id, dateBooking, roomType, eventName, startTime, endTime) {
    let eventUpdate = {
      id: id,
      date: dateBooking,
      room: roomType,
      event: eventName,
      startTime: startTime,
      endTime: endTime,
    };

    let db = firebase.database().ref("Your Reference Database" + id);
    db.set(eventUpdate);
  }