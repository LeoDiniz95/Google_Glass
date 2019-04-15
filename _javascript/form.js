calc_total(){
    var qtd = parseInt(document.getElementById('cQtd').value);
    tot = qtd * 4500;
    document.getElementById('cTot').value = tot;
}