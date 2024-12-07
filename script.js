var count=1;
function newTask(){
    var current=count;
    var task=document.getElementById('inputbox').value;
    if(task==null || task==""){
        alert("Please enter the task");
        document.getElementById('inputbox').focus();
        return false;
    }
    var container=document.getElementById('tasks');
    console.log(task);
    var newDiv=document.createElement("div");
    newDiv.innerHTML=
    `
        <div class="task" id="task${count++}">
            <input type="checkbox"></input>
            <div style="display:inline;margin:10px;color:black;">${task}</div>
            <div class="buttons">
                <button class="editbtn" onclick="editTask(${current},this)">
                  <img src="editbutton.svg" alt="edit"> 
                </button>
                <button class="delbtn" onclick="deleteTask(${current})">
                  <img src="delete.svg" alt="delete">  
                </button>
            </div>
        </div>
    `;
    container.appendChild(newDiv);
    return truel
}

function editTask(taskno,button){
    var image=button.querySelector('img');
    if(image){
        if(image.src.includes("editbutton.svg"))
            image.src="savetask.svg";
        else
            image.src="editbutton.svg";
    }
    var taskid="task"+taskno.toString();
    var edit=document.getElementById(taskid);
    edit.contentEditable=!(edit.isContentEditable);
}

function deleteTask(taskno){
    var taskid="task"+taskno.toString();
    var del=document.getElementById(taskid);
    del.style.display="none";
}



