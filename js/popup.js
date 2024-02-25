function showPopup() {
    document.getElementById('overlay').style.display = 'block';
    document.getElementById('popup').style.display = 'block';
  }

function hidePopup() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('popup').style.display = 'none';
}

function addChore() {
    var choreName = document.getElementById('chore-name').value;
    // check the regex for choreName
    if (choreName.trim() !== "") {
        var table = document.getElementById('task-table').getElementsByTagName('tbody')[0];
        var newRow = table.insertRow(table.rows.length);
        newRow.insertCell(0).innerHTML = choreName;
        newRow.insertCell(1).innerHTML = '<div class="action-button" class="delete-button">' +
        '<a href=""><img src="../assets/images/delete.svg"></a>' +
        '</div>';
        hidePopup();
    } else {
        document.getElementById('add_chore').addEventListener('chore_submit', function(event) {
            alert('Please enter a chore name.');
        });
    }
}

function assignChore() {
    var person = document.getElementById('assign-person').value;
    var chore = document.getElementById('assign-chore').value;
    var due_date = document.getElementById('due-date').value;
    if (person.trim() !== "" && chore.trim() !== "" && due_date.trim() !== "") {
        var table = document.getElementById('task-table').getElementsByTagName('tbody')[0];
        var newRow = table.insertRow(table.rows.length);
        newRow.insertCell(0).innerHTML = chore;
        newRow.insertCell(1).innerHTML = person;
        newRow.insertCell(2).innerHTML = '12-01-2023';
        newRow.insertCell(3).innerHTML = due_date;
        newRow.insertCell(4).innerHTML = 'Incomplete';
        newRow.insertCell(5).innerHTML= '<div class="action-button" id="check-button">' +
                                            '<a href=""><img src="../assets/images/delete.svg"></a>' +
                                            '</div>' + '<div class="action-button" id="check-button">' +
                                            '<a href=""><img src="../assets/images/delete.svg"></a>' +
                                            '</div>' + '<div class="action-button" id="check-button">' +
                                            '<a href=""><img src="../assets/images/delete.svg"></a>' +
                                        '</div>';
        hidePopup();
    } else {
        alert('Please enter a chore name.');
    }
}
