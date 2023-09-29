const parameterFieldsDiv = document.getElementById("parameter-fields");

function createParameterInputs(index) {
  const nameInput = document.createElement("input");
  nameInput.type = "text";
  nameInput.name = `name${index}`;
  nameInput.id = `name${index}`;
  nameInput.className =
    "block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer";
  nameInput.placeholder = `Tên thông số ${index}`;
  nameInput.required = true;

  const valueInput = document.createElement("input");
  valueInput.type = "text";
  valueInput.name = `value${index}`;
  valueInput.id = `value${index}`;
  valueInput.className =
    "block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer";
  valueInput.placeholder = `Giá trị thông số ${index}`;
  valueInput.required = true;

  return [nameInput, valueInput];
}

const addParameterFields = (count) => {
  // Clear existing fields
  parameterFieldsDiv.innerHTML = "";

  for (let i = 1; i <= count; i++) {
    const [nameInput, valueInput] = createParameterInputs(i);

    parameterFieldsDiv.appendChild(nameInput);
    parameterFieldsDiv.appendChild(valueInput);
  }
};

// Initially, create parameter fields based on default selection
addParameterFields(1);

const clusterCountSelect = document.getElementById("cluster_count");
clusterCountSelect.addEventListener("change", function () {
  const clusterCount = parseInt(clusterCountSelect.value);
  addParameterFields(clusterCount);
});
