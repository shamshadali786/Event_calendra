<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do|Calendra</title>

    <!-- Bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- End -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/vanilla-calendar-min.css">
    <script src="js/vanilla-calendar-min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="main-section">
            <div class="container">
                <h1 class="project-heading">Event Management Calendra</h1>
                <div class="row">
                    <div class="col-md-6">
                        <div class="calendar-area">

                            <div class="content">
                                <!-- <div class="area-buttons">
                                    <button class="info" name="pastDates">Disable past dates</button>
                                    <button class="info" name="availableDates">Set available dates</button>
                                    <button class="info" name="availableWeekDays">Set available weekdays</button>
                                </div> -->
                                <div id="myCalendar" class="vanilla-calendar" style="margin-bottom: 20px"></div>
                            </div>

                            <script>
                                let pastDates = true,
                                    availableDates = false,
                                    availableWeekDays = false

                                let calendar = new VanillaCalendar({
                                    selector: "#myCalendar",
                                    months: ["January", "February", "March", "April", "May", "June", "July", "Auguest", "September", "Octuber", "November", "December"],
                                    shortWeekday: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                                    onSelect: (data, elem) => {
                                        console.log(data, elem)
                                    }
                                })

                                let btnPastDates = document.querySelector('[name=pastDates]')
                                btnPastDates.addEventListener('click', () => {
                                    pastDates = !pastDates
                                    calendar.set({
                                        pastDates: pastDates
                                    })
                                    btnPastDates.innerText = `${(pastDates ? 'Disable' : 'Enable')} past dates`
                                })

                                let btnAvailableDates = document.querySelector('[name=availableDates]')
                                btnAvailableDates.addEventListener('click', () => {
                                    availableDates = !availableDates
                                    btnAvailableDates.innerText = `${(availableDates ? 'Clear available dates' : 'Set available dates')}`
                                    if (!availableDates) {
                                        calendar.set({
                                            availableDates: [],
                                            datesFilter: false
                                        })
                                        return
                                    }
                                    let dates = () => {
                                        let result = []
                                        for (let i = 1; i < 15; ++i) {
                                            if (i % 2) continue
                                            let date = new Date(new Date().getTime() + (60 * 60 * 24 * 1000) * i)
                                            result.push({
                                                date: `${String(date.getFullYear())}-${String(date.getMonth() + 1).padStart(2, 0)}-${String(date.getDate()).padStart(2, 0)}`
                                            })
                                        }
                                        return result
                                    }
                                    calendar.set({
                                        availableDates: dates(),
                                        availableWeekDays: [],
                                        datesFilter: true
                                    })
                                })

                                let btnAvailableWeekDays = document.querySelector('[name=availableWeekDays]')
                                btnAvailableWeekDays.addEventListener('click', () => {
                                    availableWeekDays = !availableWeekDays
                                    btnAvailableWeekDays.innerText = `${(availableWeekDays ? 'Clear available weekdays' : 'Set available weekdays')}`
                                    if (!availableWeekDays) {
                                        calendar.set({
                                            availableWeekDays: [],
                                            datesFilter: false
                                        })
                                        return
                                    }
                                    let days = [{
                                        day: 'monday'
                                    }, {
                                        day: 'tuesday'
                                    }, {
                                        day: 'wednesday'
                                    }, {
                                        day: 'friday'
                                    }]
                                    calendar.set({
                                        availableWeekDays: days,
                                        availableDates: [],
                                        datesFilter: true
                                    })
                                })
                            </script>

                        </div>

                        <div class="event-form-section">
                            <h3>Add Event form</h3>
                            <form action="insert.php" method="GET">
                                <div class="row">
                                    <div class="col">
                                        <input type="date" class="form-control" name="date" placeholder="Date">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" name="title" placeholder="Titel">
                                    </div>
                                </div>
                                <div class="form-group pt-3">
                                    <label for="exampleFormControlTextarea1">Content</label>
                                    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <input type="submit" value="Discard" name="discard" class="btn btn-primary">
                                <input type="submit" value="Save" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="event-list-section">


                            <!-- <div class="accordion">
                                <div class="accordion-item">
                                    <div class="item-header">
                                        <h1 class="title">Design</h1>
                                        <div class="icon">+</div>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magnam obcaecati atque! Quia ipsum temporibus distinctio amet necessitatibus assumenda tempora, nam rerum eum praesentium ducimus molestiae dicta voluptas consectetur quos.
                                    </p>
                                </div>

                                <div class="accordion-item">
                                    <div class="item-header">
                                        <h1 class="title">Websites</h1>
                                        <div class="icon">+</div>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magnam obcaecati atque! Quia ipsum temporibus distinctio amet necessitatibus assumenda tempora, nam rerum eum praesentium ducimus molestiae dicta voluptas consectetur quos.
                                    </p>
                                </div>

                                <div class="accordion-item">
                                    <div class="item-header">
                                        <h1 class="title">Sections</h1>
                                        <div class="icon">+</div>
                                    </div>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magnam obcaecati atque! Quia ipsum temporibus distinctio amet necessitatibus assumenda tempora, nam rerum eum praesentium ducimus molestiae dicta voluptas consectetur quos.
                                    </p>
                                </div>

                            </div> -->
                            <?php
                            include("connection.php");
                            // error_reporting(0);
                            $query = "SELECT * FROM `event_list`";
                            $data = mysqli_query($conn, $query);
                            $total = mysqli_num_rows($data);
                            if ($total != 0) {
                            ?>
                                <table>
                                    <tr>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Message</th>
                                        <th colspan="2">operation</th>
                                    </tr>

                                <?php
                                while ($result = mysqli_fetch_assoc($data)) {
                                    echo "<tr>
                                 <td>" . $result['date'] . "</td>
                                 <td>" . $result['title'] . "</td>
                                 <td>" . $result['msg'] . "</td>
                                 <td> <a href='update.php?rn=$result[date]&sn=$result[title]&cl=$result[msg]'>Edit</a></td>
                                 <td> <a href='delete.php?rn=$result[date]' onclick=' return checkdelete() '>Delete</a></td>
                             </tr>";
                                }
                            } else {
                                echo "No Record Found";
                            }
                                ?>
                                </table>

                                <script type="text/javascript">
                                    $(".item-header").click(function() {
                                        $(".accordion-item").removeClass("active");
                                        $(this).parent().addClass("active");
                                        $(".icon").text("+");
                                        $(this).children(".icon").text("-");
                                    });
                                </script>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Bootstrap js cdn Link -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<!-- End -->

</html>

