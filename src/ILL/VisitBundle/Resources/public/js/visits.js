$(function(){
	$('.attendee-remove').live("click", function(e)
	{
    	$(this).parent().parent().remove();
		$.ajax({
			  url: $(this).attr("data-url"),
			  dataType: 'json',
			  cache: false,
			  success: function(data)
			  {
    				$('div[id="attendee-success"]').html(data.message);
		    		$('div[id="attendee-success"]').slideDown().delay(5000).slideUp('slow');
			  }
			});
		
	});
	$('button[id="search-attendee"]').click(function(e)
	{
		e.preventDefault();
		$.ajax({
			  url: $(this).attr('data-url'),
			  dataType: 'json',
			  cache: false,
			  data: {
				q : $("input[id='query']").val()
			  },
			  success: function(data)
			  {
				    var template =
				    	"{{#attendees}}" +
			    		"<tr>" +
			    		"	<td>{{fullName}}</td>" +
			    		"	<td>{{birthDate}}</td>" +
			    		"   <td><button data-url='{{url}}' class='btn add-attendee' data-id='{{id}}'>Add</button></td>" +			    		"</tr>" +
			    		"{{/attendees}}";
					    var html = Mustache.render(template, data);
					    $('#attendees-results tbody').empty().append(html);			  
			  }
			});
	});
	$('.add-attendee').live("click", function(e)
	{		
		$(this).attr("disabled", "disabled");
		$.ajax({
			  url: $(this).attr("data-url"),
			  dataType: 'json',
			  cache: false,
			  success: function(data)
			  {
				    var template =
		    		"<tr>" +
		    		"	<td>{{fullName}}</td>" +
		    		"	<td>{{birthDate}}</td>" +
		    		"	<td>{{placeOfBirth}}</td>" +
		    		"	<td>{{nationality}}</td>" +
		    		"	<td>{{sex}}</td>" +
		    		"	<td><a data-url='{{url}}' class='btn btn-danger attendee-remove'><i class='icon-trash icon-white'></i>Remove</a></td>" +
		    		"</tr>";
				    var html =Mustache.render(template, data.attendee);
    				$('div[id="attendee-success"]').html(data.message);
				    $('div[id="attendee-success"]').slideDown().delay(5000).slideUp('slow');
				    $('#attendees tbody').append(html);
			  }
			});
	});
	$('button[id="save-institute"]').live("click", function(e)
	{		
		e.preventDefault();
		$.ajax({
			  url: $(this).attr("data-url"),
			  data: $("form[id='form-institute']").serialize(),
			  dataType: 'json',
			  type: 'POST',
			  cache: false,
			  success: function(data)
			  {
				    var template =
		    		"<tr>" +
		    		"	<td>{{institute.name}}</td>" +
		    		"	<td>{{institute.printableName}}</td>" 
		    		"</tr>";
				    var html = Mustache.render(template, data);
    				$('div[id="institute-success"]').html(data.message);
				    $('div[id="institute-success"]').slideDown().delay(5000).slideUp('slow');
				    $('#institutes tbody').append(html);
			  }
			});
	});
});