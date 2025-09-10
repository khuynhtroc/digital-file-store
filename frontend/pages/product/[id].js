import { useState } from 'react'
export default function Product({ product }){
  const [email, setEmail] = useState('')
  async function buy(){
    const res = await fetch(process.env.NEXT_PUBLIC_API_URL + '/orders', {method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify({product_id:product.id,email})})
    const data = await res.json()
    alert(data.message)
  }
  return (
    <div style={{padding:20}}>
      <h1>{product.title}</h1>
      <p>{product.description}</p>
      <input placeholder="Email của bạn" value={email} onChange={e=>setEmail(e.target.value)} />
      <button onClick={buy}>Mua ngay</button>
    </div>
  )
}

export async function getServerSideProps({ params }){
  const res = await fetch(process.env.NEXT_PUBLIC_API_URL + '/products/' + params.id)
  const product = await res.json()
  return { props: { product } }
}
