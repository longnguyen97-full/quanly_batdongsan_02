<style>
.filterDiv {
  float: left;
  /*background-color: #2196F3;*/
  /*color: #ffffff;*/
/*  width: 100px;
  line-height: 100px;*/
  text-align: center;
  margin: 2px;
  display: none;
}

.show {
  display: block;
}

.container {
  margin-top: 20px;
  overflow: hidden;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

<div class="container-fluid">
  <div id="myBtnContainer" class="container">
    <!-- <button class="btn active" onclick="filterSelection('all')"> Show all</button> -->
    <button class="btn" onclick="filterSelection('da')"> Dự Án</button>
    <button class="btn" onclick="filterSelection('tt')"> Tin Tức</button>
    <button class="btn" onclick="filterSelection('bds')"> Bất Động Sản</button>
  </div>

  <div class="container">
    <div class="filterDiv da">
      @foreach($user_duan as $row)
        @foreach($row as $key => $value)
          @php

            if ($key == "hinhanh") {
              echo "<img src='$row->hinhanh' width='700' height='394'>";
            } else {
              echo "<p>";

                if ($key == "created_at") {
                  echo "<span style='float: left;'><i>$row->created_at</i></span><br>";
                } else if ($key == "tenda") {
                  echo "<span><h5 align='center'>$row->tenda</h5></span>";
                } else if ($key == "tomtat") {
                  echo "<span style='float: center;'><i>''$row->tomtat''</i></span>";
                }

              echo "</p>";
            }

          @endphp
        @endforeach
      @endforeach
    </div>

    <div class="filterDiv tt">
<div align="left" style="width: 700px; height: 514px; border: 1px solid white;">
      {{-- <ul style="list-style-type: none; margin: 15px 0px 15px 0px; padding-right: 200px;"> --}}
      @foreach($user_tintuc as $row)
        @foreach($row as $key => $value)
        {{-- <li> --}}
          @php
            if ($key == "tieudett") {echo "<a href=''>$row->tieudett</a><br>";}
            else {echo "<i>($row->ngdangtt)</i><br><br>";}
          @endphp
        {{-- </li> --}}
        @endforeach
      @endforeach
      {{-- </ul> --}}
    </div>
</div>
    <div class="filterDiv bds">
<div class="dv-box"><img src="hinh/background2.png" width="700" height="458" border="1px solid white"></div><br>
<h5>Top 5 Loại Bất Động Sản</h5>
{{--       <p align="center">
        <span style="float: left;"></span><br>
        <span><h5 align='center'></h5></span>
        <span style='float: center;'><i></i></span>
      </p> --}}

     {{--  @foreach($user_duan as $row)
        @foreach($row as $key => $value)
          @php

            if ($key == "hinhanh") {
              echo "<img src='$row->hinhanh' width='700'>";
            } else {
              echo "<p>";

                if ($key == "created_at") {
                  echo "<span style='float: left;'><i>$row->created_at</i></span><br>";
                } else if ($key == "tenda") {
                  echo "<span><h5 align='center'>$row->tenda</h5></span>";
                } else if ($key == "tomtat") {
                  echo "<span style='float: center;'><i>''$row->tomtat''</i></span>";
                }

              echo "</p>";
            }

          @endphp
        @endforeach
      @endforeach --}}
    </div>

    <div class="filterDiv cdt">
      @foreach($user_duan as $row)
        @foreach($row as $key => $value)
          @php

            if ($key == "hinhanh") {
              echo "<img src='$row->hinhanh' width='700'>";
            } else {
              echo "<p>";

                if ($key == "created_at") {
                  echo "<span style='float: left;'><i>$row->created_at</i></span><br>";
                } else if ($key == "tenda") {
                  echo "<span><h5 align='center'>$row->tenda</h5></span>";
                } else if ($key == "tomtat") {
                  echo "<span style='float: center;'><i>''$row->tomtat''</i></span>";
                }

              echo "</p>";
            }

          @endphp
        @endforeach
      @endforeach
    </div>
    <!-- div class="filterDiv cars">BMW</div>
    <div class="filterDiv colors fruits">Orange</div>
    <div class="filterDiv cars">Volvo</div>
    <div class="filterDiv colors">Red</div>
    <div class="filterDiv cars animals">Mustang</div>
    <div class="filterDiv colors">Blue</div>
    <div class="filterDiv animals">Cat</div>
    <div class="filterDiv animals">Dog</div>
    <div class="filterDiv fruits">Melon</div>
    <div class="filterDiv fruits animals">Kiwi</div>
    <div class="filterDiv fruits">Banana</div>
    <div class="filterDiv fruits">Lemon</div>
    <div class="filterDiv animals">Cow</div> -->
  </div>
</div>

<script>
filterSelection("da")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<script type="text/javascript">
  var images = ["background1.png", "background2.png", "background3.png", "background2.png"];
  $(function () {
    var i = 0;
    $(".dv-box").html("<img width='700' height='458' id='auto' src='hinh/"+ images[i] +"'/>");

    setInterval(function () {
      i++;
      $(".dv-box").fadeOut("slow", function () {
        $(this).html("<img width='700' height='458' id='auto' src='hinh/"+ images[i] +"'/>");
        $(this).fadeIn("slow");
      });
      if (i == images.length) {
        i = 0;
      }
    }, 3000);
  });
</script>