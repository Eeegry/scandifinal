<nav class="navbar navbar-light bg-light navbar-expand-lg">
  <div class="navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item">
        <a href="product_add.php" class="nav-link">Add products</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-5">
  <div class="row">
    <div class="col-6 offset-3">
      <form id="form" method="post" class="border p-4">
        <fieldset class="form-group">
          <label class="text-center">Category</label>
          <select name="category" id="product-add" class="form-control">
            <option value="">Please select the product</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
          </select>
        </fieldset>
        <input name="save" value="Save" type="submit" id="save" class="btn btn-primary mt-2">
      </form>
    </div>
  </div>
</div>

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
      const div = createElement('div', 'form-group')
      const label = createElement('label', 'form-label', `${field.charAt(0).toUpperCase()}${field.slice(1)}`, [{
        name: 'for',
        value: field
      }])
      const input = createElement('input', 'form-control', null,
        [{
          name: 'type',
          value: 'text'
        }, {
          name: 'name',
          value: field
        }, {
          name: 'id',
          value: field
        }]
      )
      div.appendChild(label)
      div.appendChild(input)
      div.classList.add('justify-content-center')
      form.appendChild(div)
    })
    return form
  }

  function createElement(tag, className, text, attrs) {
    const elem = document.createElement(tag)
    elem.classList.add(className)
    if (text) {
      elem.textContent = text
    }
    if (attrs) {
      attrs.forEach(attr => {
        elem.setAttribute(attr.name, attr.value)
      })
    }
    return elem
  }
</script>
</div>
</div>