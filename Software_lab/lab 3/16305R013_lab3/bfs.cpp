//Breadth First Search Function
void BFS(list<longlong int> queue,long long int length){
	long long int v;
	if(queue.empty())
		return;
	list<long long int>::iterator i;
	list<long long int> queue temp;
	while(!queue.empty()){
		v=queue.front();
		queue.pop front();
		for(i=adj[v].begin();i!=adj[v].end();i++){
			if(!pro ver[*i]){
				result[*i]=length;
				queue temp.push back(*i);
				pro ver[*i]=true;
				adj[*i].remove(v);
			}
		}
	}
	BFS(queue temp,length+6);
}
