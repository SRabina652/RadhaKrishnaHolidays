var counter=1;
var textBox = "";
var days= document.getElementById('daysdetail');
function addTextBox(){
    var div=document.createElement('div');
    div.setAttribute("class","form-group");
    div.setAttribute("id","box_"+counter);

    textBox = '<label class="mt-3">Day '+(counter + 1)+'</label><input type="text" class="form-control" id="days" name="DayDescription['+counter+']"/><input class="text-primary bg-danger border-0 mt-2 text-white p-2" type="button" value="remove" onclick="removeBox(this)"/>';
    div.innerHTML = textBox;
    days.appendChild(div);
    counter++;
}

function removeBox(box){
    box.parentNode.remove();
}

