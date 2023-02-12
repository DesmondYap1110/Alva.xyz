//The Ajax For verify when adding ID and Email and Outlet
function checkExist(type)
{
		$.ajax({
				type: "POST",
				url: "outlet-setup-checking.ajax.php",
				data:
				{
						'info': tinfo(type),
						'type': type
				},
				success:function(data)
				{
						buttonblock(data)
						if(type==0)
						{
							displayID(data);
							//console.log("This is User ID");
						}
						else if(type==1)
						{
							displayEmail(data);
							//console.log("This is Email");
						}
						else if(type==2)
						{
							displayID(data);
						}
				}
		})
}

//The Ajax For verify when editting ID and Email

function checkExist2(type,ID)
{
		$.ajax({
				type: "POST",
				url: "outlet-setup-checking.ajax.php",
				data:
				{
						'ID':ID, //Check This ID 
						'info': tinfo(type),
						'type': type
				},
				success:function(data)
				{
						buttonblock(data)
						if(type==3)
						{
							displayID(data);
							//console.log("This is User ID");
						}
						else if(type==4)
						{
							displayEmail(data);
							//console.log("This is Email");
						}
						else if(type==5)
						{
							displayID(data);
						}
				}
		})
}

//__________________________________________________________________________________________________
//
//																			FUNCTION PART ()
//
//__________________________________________________________________________________________________

function tinfo(type)
{
	//------------------------
	// type : 0 & 3 => member_ID
	// type : 1 & 4 => Email
	// type : 2 & 5 => Outlet ID
	//------------------------
	var info;
	
	if(type==0||type==3)
	{
			info = document.getElementById("s_id").value;
	}
	else if (type==1||type==4)
	{
			info = document.getElementById("email").value;
	}
	else if (type==2||type==5)
	{
			info = document.getElementById("oid").value;
	}

	return info;
}

function displayID(data)
{
	if(data==0)
	{
		document.getElementById("idcheck").style.display = "none";
		
		//console.log("This is False");
	}
	else if(data==1)
	{
		document.getElementById("idcheck").style.display = "block";
		$("#idcheck").html('<em style="color: #fff; border: 1px solid #fd6074; background-color: #fd6074; padding: 3px; display: block; margin-top: 2px; font-style: normal; font-size: 11px; line-height: 15px;">ID is already Exist!</em>');
		//console.log("This is True");
	}

}

function displayEmail(data)
{
	if(data==0)
	{
		document.getElementById("emailcheck").style.display = "none";

		//console.log("This is False");
	}
	else if(data==1)
	{
		document.getElementById("emailcheck").style.display = "block";
		$("#emailcheck").html('<em style="color: #fff; border: 1px solid #fd6074; background-color: #fd6074; padding: 3px; display: block; margin-top: 2px; font-style: normal; font-size: 11px; line-height: 15px;">Email is already Exist!</em>');
		//console.log("This is True");
	}

}

function buttonblock(data)
{
	if(data==0)
	{
		document.getElementsByClassName("btn1")[0].disabled = false;
	}
	else if(data==1)
	{
		document.getElementsByClassName("btn1")[0].disabled = true;
	}
}

