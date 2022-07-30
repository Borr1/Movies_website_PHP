function Numerique(Ch){
    for(var i=0; i<Ch.length; i++){
      if ((Ch.charAt(i)<"0") || (Ch.charAt(i)>"9")){
        return false;
      } 
    }
    return true; 
  }
  
  function Alphabetique(Ch){
    var Lettres='ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    for(var i=0; i<Ch.length; i++){
      if(Lettres.indexOf(Ch[i].toUpperCase())<0) 
      return false;
    }
    return true;  //Ce n’est pas nécessaire de retourner true
  }
  
  function Verif(){
    var Nom=document.f.getElementByIdf(userName).value;
  if (Nom.length<3 || Nom.length>30 || !Alphabetique(Nom) || Numerique(Nom)){
    alert('Nom invalide') ; 
    return false;}
  
    
  }
  