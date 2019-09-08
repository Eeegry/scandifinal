<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Product add</title>
  
</head>
<body>

<h1>Product add page</h1>
<hr>

<div class="container">
        <form id="form" method="post">
        <div class="row justify-content-center">
        <label>Category</label>
        <select name="category" id="product-add">
            <option value="">Please select the product</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        </div>
        <input name="save" value="Save" type="submit" id="save">
        </form> 

    <script>
    const persistentFields = ['sku', 'price', 'name']
    const fields = {
      disc: ['size'],
      book: ['weight'],
      furniture: ['height', 'width', 'length']
    }
    const productAdd = document.getElementById('product-add')
    const form = document.getElementById('form')
    const submitButton = document.getElementById('save')
    window.addEventListener('DOMContentLoaded', () => {
      form.appendChild(submitButton)
    })
   
    productAdd.addEventListener('change', e => {
      const category = e.target.value
  
      if (category) {
        cleanForm()
        form.appendChild(productAdd)
        renderFields(persistentFields)
        renderFields(fields[category])
        form.appendChild(submitButton)

      }
    })

    function cleanForm() {
      while (form.firstChild) {
        form.removeChild(form.firstChild)
      }
    }
 
    
 
    function renderFields(fields) {
      fields.forEach(field => {
        const div = document.createElement('div')     
        const label = document.createElement('label')
        const input = document.createElement('input')
        label.setAttribute('for', field)
        label.textContent = `${field.charAt(0).toUpperCase()}${field.slice(1)}`
        input.setAttribute('type', 'text')
        input.setAttribute('name', field)
        input.setAttribute('id', field)
        div.appendChild(label)
        div.appendChild(input)
        div.classList.add('justify-content-center')
        form.appendChild(div)
      })
      return form
    }
    </script>

    <label></label>
    </div>
</div>
<?php



?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
