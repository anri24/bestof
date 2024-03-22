
const html_parent = document.querySelector('#root');

const propertyDiv = document.createElement('div');
propertyDiv.classList.add('property-list');

const divTitle = document.createElement('h2');
divTitle.classList.add('div-property-title');
divTitle.textContent = 'ბინები';
propertyDiv.append(divTitle);

const properties = document.createElement('div')
properties.classList.add('properties')


const propertyFetch = await fetch('http://127.0.0.1:8000/api/properties/1');
const propertyData = await propertyFetch.json();

propertyData.map(data => {
    console.log(data)
    const property = document.createElement('div')
    property.classList.add('property');

    const propertyTitle = document.createElement('h3');
    propertyTitle.classList.add('property-title')
    propertyTitle.textContent = data.title;
    property.append(propertyTitle);

    const propertyDesc = document.createElement('p');
    propertyDesc.classList.add('property-desc')
    propertyDesc.textContent = data.description;
    property.append(propertyDesc);

    const priceDiv = document.createElement('div');
    priceDiv.classList.add('price-details');

    const propertyPrice = document.createElement('p');
    propertyPrice.classList.add('property-price');
    propertyPrice.textContent = data.price;
    priceDiv.append(propertyPrice);

    const priceType = document.createElement('p');
    priceType.classList.add('price-type');
    priceType.textContent = data.price_type;
    priceDiv.append(priceType)




    property.append(priceDiv)

    properties.append(property);

})

propertyDiv.append(properties);

html_parent.append(propertyDiv);
