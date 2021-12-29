const getBtn = documet.getElementById('login');
const postBtn = document.getElementById('login');

const getData = () => {
    axios.get('backendurl',{headers={'Authorziation' : `token $(access_token)`}}
    //{headers = {'Authorization' : localStorage.setitem("token")}}
    ).then(response => {
    console.log(response);
    
  });
};

const sendData = () => {
    axios
      .post(
        'backendurl',
        {
          email:$('#mail'),
          password:$('#pass')
          
        },
        {
          headers: {
          
          'Authorziation': `basic ${token}`,
          //'Authorization': localStorage.getitem("token"),
          }
        }
      )
      .then(response => {
        console.log(response);
      })
      .catch(err => {
        console.log(err, err.response);
      });
  };
  
  getBtn.addEventListener('click', getData);
  postBtn.addEventListener('click', sendData);