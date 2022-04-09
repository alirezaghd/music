var answer_num = 2

function add_answers() {


    var label_tag = document.createElement("LABEL");
    label_tag.className = "form-label"
    answer_num++;
    label_tag.innerHTML = "پاسخ" +" " + answer_num;


    var new_input = document.createElement("INPUT");
    new_input.className = "form-control rounded-pill"

    new_input.setAttribute("type", "text");
    new_input.setAttribute("name", "answer[]");

    var div_tag = document.createElement("DIV");
    div_tag.className = "mb-3"

    div_tag.appendChild(label_tag)
    div_tag.appendChild(new_input)

    document.getElementById("answers").appendChild(div_tag)


}

function del_answers() {
   answer_div_tag =  document.getElementById("answers");

   if(answer_div_tag.children.length > 2){
       answer_div_tag.lastChild.remove()
       answer_num--;
   }
}