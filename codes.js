$(document).ready(work);
function work() {
  // $('#word').keypress((event)=>{
  //   event.preventDefault();
  //   $.ajax({
  //     type:'POST',
  //     url:$('#dForm').attr('action'),
  //     data:$('#dForm').serialize(),
  //     success:(data)=>{
  //       $('.results').html(data);
  //       },
  //   });
  // });
  $('#word').keypress((event)=>{
    $('.results').html('<div class="line"><span class="frst">something-here</span><span class="scond">some-thingheretoo</span></div>');

  });
  $('#btn').click((event)=>{
    event.preventDefault();
    $('.results').html('<div class="line"><span class="frst">something-here</span><span class="scond">some-thingheretoo</span></div>');

  });

}
