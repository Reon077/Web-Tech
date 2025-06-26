<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="../../assets/styles/contact_us/contact_us.css">
  <title>CareerSphere | Contact Us</title>
</head>
<body>

<h2>Contact Us</h2>

<form onsubmit="return validateForm(event)" enctype="" method="POST" action="/CareerSphere/controller/contact.php" >
  <fieldset>
    <legend id="table-title">Contact Information</legend>
    <table>
      <tr>
        <td><label for="fullname">Full Name</label></td>
        <td><input type="text" id="fullname" name="fullname" /></td>
      </tr>
      <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" id="email" name="email" /></td>
      </tr>
      <tr>
        <td><label for="message">Message</label></td>
        <td><textarea id="message" name="message" rows="4" ></textarea></td>
      </tr>
      <tr>
        <td colspan="2">
          <div class="button-row">
            <input type="reset" value="Reset" />
            <input type="submit" value="Submit" />
          </div>
        </td>
      </tr>
    </table>
    <p id="error"></p>
  </fieldset>
</form>

<script src="../../assets/scripts/contact_us/contact_us.js"></script>
</body>
</html>
