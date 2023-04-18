var counter=1;
var textBox = "";
var days= document.getElementById('daysdetail');
function addTextBox(){
    var div=document.createElement('div');
    div.setAttribute("class","form-group");
    div.setAttribute("id","box_"+counter);

    textBox = '<label>Exclude '+(counter + 1)+'</label><input type="text" class="form-control" id="days" name="ExcludePoints['+counter+']"/><input class="text-primary bg-warning border-0 mt-1 p-2" type="button" value="remove" onclick="removeBox(this)"/>';
    div.innerHTML = textBox;
    days.appendChild(div);
    counter++;
}

function removeBox(box){
    box.parentNode.remove();
}

