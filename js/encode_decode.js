Encoder.EncodeType = "entity";

function encode_html(str)
{
   document.getElementById('encoded_box').value = Encoder.htmlEncode(str);
}

function decode_html(str)
{
   document.getElementById('decoded_box').value = Encoder.htmlDecode(str);
}