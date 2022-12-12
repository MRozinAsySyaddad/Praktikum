const button = document.getElementsByTagName('button')[0];

button.onclick = function () {
	var num = document.getElementById('num').value;
	if (num <= 0 || num >= 21) {
		alert('Pilih bilangan antara 1 sampai 20');
	}else if (num % 2 == 1) {
		let result = '';
		var before = 0, after = 1;
		do{
			result += after + ' ';
			var temp = after;
			after += before;
			before = temp;
		} while(num * 10 >= after);
		alert(result);
	} else if (num % 2 == 0) {
		let result = '1';
		var temp = 1;
		for (let i = 2; i <= num / 2; i++){
			result += ' x ' + i;
			temp *= i;
		}
		alert(result + ' = ' + temp);
	}
}