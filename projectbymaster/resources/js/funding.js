function get_title(){
  var obj = {"Project Title":"Creator"};
  
}

var obj = {0:"First reward", 1: "Second reward", 2: "Second reward", 3: "Second reward", 4: "Second reward", 5: "Second reward", 6: "Second reward"};
for (var key in obj){
	var radioBtn = $('<ol><label><input type="radio" name="radioButton" value=$'+ key+'/> $'+key+ '\t' + obj[key] + '</label></ol><hr>');
	radioBtn.appendTo('#rewards');
}


var reward_val = null;
$("input[name=radioButton]").click(function() {
  reward_val = this.value;
  $('#output').text(reward_val);
});

$('#amount').on("input", function() {
  var dInput = this.value;
  console.log(dInput);
  $('#output').text(dInput);
});
	



