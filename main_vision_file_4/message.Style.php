<style>
     .message_container{
  width: 100% !important;
  display: flex;
  justify-content: center;
  align-items: center;
}
.message_container .message{
  height: 4rem !important;
  width: 80%;
background-color: white !important;
border-radius: .5rem;
display: flex;
font-size: 1.3rem;
align-items: center;
margin-top: 1rem;

}
.message.message_error{
  border-left: 2px solid red !important ;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding:0 2rem;
  text-transform: capitalize;
  justify-content: space-between;
}
.message.message_error strong{
  color: red;
}
.message.message_success strong{
  color: green;
}
.message.message_success{
  border-left: 2px solid green !important ;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding:0 2rem;
  text-transform: capitalize;
  justify-content: space-between;
}
.message div i{
  cursor: pointer;
}
.message a{
  color: #4192DC;
  text-decoration: underline !important;
}
.message strong{
  margin-right: 0.2rem;
}
.message_text{
  display: flex !important; 
}
</style>