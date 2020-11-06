/**
 * 4.
 *
 * The form: document.getElementsByTagName('form')
 * The second input: document.querySelector("form input[name='quantity']")
 * All inputs: document.querySelectorAll('form input')
 */

const form = document.getElementsByTagName('form')[0]

form.addEventListener('submit', (e) => {
  e.preventDefault()

  const description = e.target[0].value
  const quantity = e.target[1].value

  const tr = document.createElement('tr')

  const td1 = document.createElement('td')
  const td2 = document.createElement('td')
  const td3 = document.createElement('td')

  const inputQuantity = document.createElement('input')
  inputQuantity.setAttribute('type', 'number')
  inputQuantity.setAttribute('value', quantity)

  inputQuantity.onchange = (e) => {
    inputQuantity.setAttribute('value', e.target.value)
    updateTotal()
  }

  const inputRemove = document.createElement('input')
  inputRemove.setAttribute('type', 'button')
  inputRemove.setAttribute('value', 'Remove')

  inputRemove.onclick = (e) => {
    e.preventDefault()
    tr.remove()

    updateTotal()
  }

  td1.innerHTML = description
  td2.append(inputQuantity)
  td3.append(inputRemove)

  tr.append(td1)
  tr.append(td2)
  tr.append(td3)

  document.querySelector('#products tbody').append(tr)

  updateTotal()
})

const getTotal = () => {
  const trs = document.querySelectorAll('#products tbody tr')

  let total = 0

  trs.forEach((tr) => {
    if (tr.children.length === 3 && tr.children[1].tagName === 'TD') {
      const input = tr.children[1].children[0]

      total += parseInt(input.attributes['value'].value)
    }
  })

  return total
}

const updateTotal = () => {
  console.log('updated')
  document.getElementById('total').innerHTML = getTotal()
}
