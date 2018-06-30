//$("#section_1").stellar();

const $html_body = $("html,body");

const $section_1 = $("#section_1");
const $section_2 = $("#section_2");
const $section_3 = $("#section_3");
const $section_4 = $("#section_4");
const $section_6 = $("#section_6");

const $first = $("#first");
const $second = $("#second");
const $third = $("#third");
const $fourth = $("#fourth");
const $fifth = $("#fifth");

const form = $("#contact-form");
const submit = $("#submit");
const snackbar = $("#snackbar");

$first.click(function(){
	scroll($section_1);
});
$second.click(function(){
	scroll($section_2);
});
$third.click(function(){
	scroll($section_3);
});
$fourth.click(function(){
	scroll($section_4);
});
$fifth.click(function(){
	scroll($section_6);
});

function scroll(element) {
	$html_body.animate({
		scrollTop: element.offset().top
	}, "slow");
}

submit.click(function() {
	submit.text("Sending");
	$.post("/sendEmail/", form.serialize(), function() {
		snackbar.text("Your email has been sent successfully");
	}).fail(function() {
		snackbar.text("There was a problem sending you email, please try again later or use the contact details provided");
	}).always(function() {
		submit.text("Send");
		snackbar.addClass("show");
		setTimeout(function() {
			snackbar.removeClass("show");
		}, 3000);
	});
});