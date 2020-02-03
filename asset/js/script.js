$.getJSON('https://randomuser.me/api/', function (data) {
    let result = data.results;

    $.each(result, function (i, data) {
        $('.profile-user').append(`
            <div class="card" style="width: 18rem;">
            <img src="`+ data.picture.large + `" class="card-img-top" alt="...">
            <div class= "card-body" >
            <h2 class="card-title">`+ data.name.first + `</h2>
            <p class="card-text gender"><b>Gender</b> : `+ data.gender + `</p>
            <p class="card-text address"><b>Adreess</b> : `+ data.location.street.number + `, ` + data.location.street.name + `</p>
            <p class="card-text gender"><b>Date of Birth</b> : `+ data.dob.date + ` &nbsp; <b>Age</b> : ` + data.dob.age + `</p>
            <p class="card-text gender"><b>Phone Number</b> : `+ data.phone + `</p>
            <a href="index" class="btn btn-primary go-back">Go Back</a>
            </div >
        </div >
            `);
    });
});