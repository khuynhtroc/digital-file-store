import useSWR from 'swr'
const fetcher = url => fetch(url).then(r => r.json())
export default function Home(){
  const { data, error } = useSWR(process.env.NEXT_PUBLIC_API_URL + '/products', fetcher)
  if(error) return <div>Failed to load</div>
  if(!data) return <div>Loading...</div>
  return (
    <div style={{padding:20}}>
      <h1>Danh sách sản phẩm</h1>
      <div style={{display:'grid',gridTemplateColumns:'repeat(3,1fr)',gap:16}}>
        {data.data.map(p => (
          <div key={p.id} style={{border:'1px solid #eee',padding:12}}>
            <img src={p.thumb || '/placeholder.png'} style={{width:'100%',height:140,objectFit:'cover'}}/>
            <h3>{p.title}</h3>
            <p>{p.price} VND</p>
            <a href={'/product/' + p.id}>Chi tiết</a>
          </div>
        ))}
      </div>
    </div>
  )
}
